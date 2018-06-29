# Lab - Multiple App with Symfony 4 and JWT Authentication

### Installation

    composer install

Generate the SSH keys :

    $ mkdir -p config/jwt # For Symfony3+, no need of the -p option
    $ openssl genrsa -out config/jwt/private.pem -aes256 4096
    $ openssl rsa -pubout -in config/jwt/private.pem -out config/jwt/public.pem

### Configuration
    

###   Usage

    bin/console server:run
    
1. Create user

Note: You can create a user with a simple curl command like this:

    curl -X POST -H "Content-Type: application/json" http://127.0.0.1:8000/users -d '{"username":"johndoe","plainPassword":"test"}'

2. Obtain the token

Note: You can test getting the token with a simple curl command like this:

    curl -X POST -H "Content-Type: application/json" http://127.0.0.1:8000/login_check -d '{"username":"johndoe","password":"test"}'

If it works, you will receive something like this:

    {
       "token" : "eyJhbGciOiJSUzI1NiIsInR5cCI6IkpXUyJ9.eyJleHAiOjE0MzQ3Mjc1MzYsInVzZXJuYW1lIjoia29ybGVvbiIsImlhdCI6IjE0MzQ2NDExMzYifQ.nh0L_wuJy6ZKIQWh6OrW5hdLkviTs1_bau2GqYdDCB0Yqy_RplkFghsuqMpsFls8zKEErdX5TYCOR7muX0aQvQxGQ4mpBkvMDhJ4-pE4ct2obeMTr_s4X8nC00rBYPofrOONUOR4utbzvbd4d2xT_tj4TdR_0tsr91Y7VskCRFnoXAnNT-qQb7ci7HIBTbutb9zVStOFejrb4aLbr7Fl4byeIEYgp2Gd7gY"
    }


