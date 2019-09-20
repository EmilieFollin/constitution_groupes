Rails.application.routes.draw do
  get '/' => "application#build_teams"
  post '/' => "application#build_teams"
end
