Rails.application.configure do
  config.cache_classes = true
  config.eager_load = false
  config.consider_all_requests_local = false
  config.action_controller.perform_caching = true
  config.public_file_server.enabled = ENV['RAILS_SERVE_STATIC_FILES'].present?
  config.assets.compile = false
  config.log_level = :debug
  config.log_tags = [ :request_id ]
  config.action_mailer.perform_caching = false
  config.active_record.migration_error = false
  config.active_support.deprecation = :notify
  config.log_formatter = ::Logger::Formatter.new
  config.require_master_key = false
  config.active_record.dump_schema_after_migration = false
end