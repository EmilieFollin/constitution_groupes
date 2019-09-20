class ApplicationController < ActionController::Base
    skip_before_action :verify_authenticity_token

    def build_teams
	require 'json'
	raise "Param with '_json' key is required" unless params[:_json]
	request = JSON.parse(params[:_json])
	
	received_teams = []
	request.each do |received_team|
		received_teams << received_team
	end
	n_teams = received_teams.count

        team_size = received_teams.first.count/n_teams 
        allowed_difference = team_size*0.2

        p allowed_difference
       	 
	@teams = received_teams
        
        # Groupes triés par personnalité
        @teams.each_with_index do |team, i|
            n_back = 0
            n_front = 0
            n_mid = 0
            team.each do |student|
                p student
		n_back += 1 if student['moyenne_back'].to_i > student['moyenne_front'].to_i
                n_front += 1 if student['moyenne_front'].to_i > student['moyenne_back'].to_i
                n_mid += 1 if student['moyenne_front'].to_i == student['moyenne_back'].to_i
            end
            @teams[i] << {back: n_back, front: n_front, mid: n_mid}
        end
        
        @teams.each_with_index do |team, team_index|
            n_back = team.last[:back]
            n_front = team.last[:front]
            n_mid = team.last[:mid]

            allowed_difference += n_mid
                        
            if ((team_size/2.to_f)-allowed_difference...(team_size/2.to_f)+allowed_difference) === n_back && ((team_size/2.to_f)-allowed_difference...(team_size/2.to_f)+allowed_difference) === n_front
                
                @teams[team_index] = team
            else
                if need_back?(team)
                    p "NEED BACK AT #{team_index}"
                    # trouve le groupe qui a besoin d'un front
                    giver_team_result = find_team_that_need_front(@teams)
                    giver_team_index = giver_team_result[0]
                    giver_team = giver_team_result[1]
                    p "BACK TAKEN FROM #{giver_team_index}"
                    
                    receiver_team = team
                    receiver_team_index = team_index


                    gived_student_index = select_exchangeable_student(giver_team, 'back')
                    transfered_student_index = select_exchangeable_student(receiver_team, 'front')

                    result = exchange_student(giver_team, receiver_team, gived_student_index, transfered_student_index)

                    p 'NO MORE BACK STUDENTS AVAILABLE'
                    next unless giver_team_index.is_a?(Integer)
                    @teams[giver_team_index] = result[0]
                    @teams[team_index] = result[1]

                    @teams[giver_team_index] = update_skill_total(giver_team)
                    @teams[team_index] = update_skill_total(team)
                elsif need_front?(team)
                    p "NEED FRONT AT #{team_index}"
                    giver_team_result = find_team_that_need_back(@teams)
                    giver_team_index = giver_team_result[0]
                    giver_team = giver_team_result[1]
                    p "FRONT TAKEN FROM #{giver_team_index}"

                    receiver_team = team
                    receiver_team_index = team_index

                    gived_student_index = select_exchangeable_student(giver_team, 'front')
                    transfered_student_index = select_exchangeable_student(receiver_team, 'back')

                    result = exchange_student(giver_team, receiver_team, gived_student_index, transfered_student_index)

                    p 'NO MORE FRONT STUDENTS AVAILABLE'
                    next unless giver_team_index.is_a?(Integer)
                    @teams[giver_team_index] = result[0]
                    @teams[team_index] = result[1]

                    @teams[giver_team_index] = update_skill_total(giver_team)
                    @teams[team_index] = update_skill_total(team)
                end
            end
        end        
        render json: @teams
    end


    def need_back?(team)
        true if team.last[:back] < team.last[:front] 
    end
    

    def need_front?(team)
        true if team.last[:back] > team.last[:front] 
    end

    def find_team_that_need_back(teams)
        result = []
        teams.each_with_index do |team, i|
            if team.last[:front] > team.last[:back]
                result << i
                result << team
                return result
            end
        end
    end

    def update_skill_total(team)
        p 'BEFORE'
        p team.last
        back = front = 0
        team.each do |student|
            next unless student['moyenne_front']
            back += 1 if student['moyenne_front'].to_i < student['moyenne_back'].to_i
            front += 1 if student['moyenne_front'].to_i > student['moyenne_back'].to_i
        end
        
        team.last[:front] = front
        team.last[:back] = back
        p 'AFTER'
        p team.last
        return team
    end
    
    def find_team_that_need_front(teams)
        result = []
        teams.each_with_index do |team, i|
            if team.last[:front] < team.last[:back]
                result << i
                result << team
                return result
            end
        end
    end
    
    def select_exchangeable_student(team, skill)
        if skill == 'front'
            team.each_with_index do |student, index|
                next if index.zero?
                next unless student['moyenne_front']
                return index if student['moyenne_front'].to_i > student['moyenne_back'].to_i
            end
        elsif skill == 'back'
            team.each_with_index do |student, index|
                next if index.zero?
                next unless student['moyenne_front']
                return index if student['moyenne_front'].to_i < student['moyenne_back'].to_i
            end
        end
    end

    
    def exchange_student(giver_team, receiver_team, gived_student_index, transfered_student_index)
        gived_student = giver_team[gived_student_index]
        transfered_student = receiver_team[transfered_student_index]

        result = []

        receiver_team[transfered_student_index] = gived_student
        giver_team[gived_student_index] = transfered_student

        # 1: giver_team 2: receiver_team
        result << giver_team
        result << receiver_team
        return result
    end
end
