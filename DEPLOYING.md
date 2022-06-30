
# Deploying

- `git checkout main` => Make changes
- `git checkout production && git merge main` => Merge changes into production
- `lando composer install` => Bedrock
- `lando composer install && yarn install` => Sage
- `yarn bud clean` => Clear out /public/
- `yarn build` => Compile for production and test on local
- `git push origin production` => If happy, push to repo
- ssh into guywhale.com folder on server
- `git checkout production` => Ensure you are in right branch
- `git pull origin production`