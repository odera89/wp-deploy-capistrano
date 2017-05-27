set :application, "your-application-name"

set :repository, "https://github.com/odera89/wp-deploy-capistrano.git"
set :scm, :git
set :deploy_to, "/home/truthsi/wpcapdeploy.truthsit.es"

#set :deploy_via, :remote_cache
set :deploy_via, :checkout

set :copy_exclude, [".DS_Store", ".gitmodules"]

set :use_sudo, false

server "truthsi@truthsit.es", :app

set :current_dir, "kwikkar"