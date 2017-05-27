set :application, "your-application-name"

set :repository, "https://github.com/odera89/wp-deploy-capistrano.git"
set :scm, :git
set :deploy_to, "/home/truthsi/wpcapdeploy.truthsit.es"

set :deploy_via, :remote_cache

set :copy_exclude, [".DS_Store", ".gitmodules"]

server "truthsi@truthsit.es", :app