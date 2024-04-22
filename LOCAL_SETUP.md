# Local setup guide

## Using Docker

1. Clone the Git repository to your local computer (GitHub Desktop, GitKraken)
2. Run the following command in your CLI:
```composer install```
3. Create a copy of the *.env.example* file and rename it to *.env*
4. After composer finished installing start Docker Desktop
5. Run the following command: 
```sail up```
6. Run the command to execute the database migrations
```sail artisan migrate```
7. Open another terminal window and run 
```npm run dev```
8. You should now be able to access your local environment on **http://localhost:8080**
9. Just register yourself an account and a new club
