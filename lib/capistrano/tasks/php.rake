namespace :php do

	desc 'change permission'
	task :change_permission do
		on roles(:web) do
			within release_path do
				execute :sudo, :chown, "-R", "www-data:www-data", 'web/cache'
			end
		end		
	end
end