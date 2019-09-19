Rails.application.routes.draw do
  get '/' => "application#build_teams"
end