# 🚀 Connexion client : password_hash()
```php

$hashed_password = password_hash("1984", PASSWORD_DEFAULT);

 # Exemple pratique

$password = 1984;

$hashed_password = password_hash($password, PASSWORD_DEFAULT);

 if(password_verify($password, $hashed_password)) {
            print "Connexion réussie ! ".$hashed_password;
          
        }
        else{
            print "mot de passe non valide!!!";
    }


````