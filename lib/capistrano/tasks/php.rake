namespace :php do

	desc 'change permission'
	task :change_permission do
		on roles(:web) do
			within release_path do
				execute :chmod, "-R 777 web/"
				#execute :chown, "-R", "www-data:www-data", 'web/cache'
			end
		end		
	end

	#desc 'reverse permission before cleanup'
	#task :reverse_permission do
	#	on roles(:web) do
	#		within release_path do
	#			sudo :chown, "-R", "deploy:deploy", 'web/cache'
	#		end
	#	end		
	#end
end