# Créer un wordpress
- mkdir 'dir'
- cd 'dir'
- wp core download --locale=fr_FR

- créer base de donnée : script mkdb.sh dans install-script (jibundeyare)
Ou créer base de données manuellement

- wp config create --dbname=testing --dbuser=wp --dbpass=securepswd 
- wp core install --url=example.com --title=Example --admin_user=supervisor 
	--admin_password=strongpassword --admin_email=info@example.com

deplacer le dossier custom-theme dans wp-content/theme

# Demarrage
## serveur de dev PHP 
php -S localhost:8000

## wordpress
faire attention pour le back office à avoir une adresse de type /wp-admin/ (le dernier '/' très important)

# Ressources 

## Daishi & docu officielle
- https://github.com/jibundeyare/cours/blob/master/wordpress-theme-dev.md
- https://developer.wordpress.org/themes/basics/main-stylesheet-style-css/
- https://developer.wordpress.org/themes/basics/the-loop/
- https://developer.wordpress.org/themes/basics/including-css-javascript/

## Misc

- https://rudrastyh.com/wordpress/include-css-and-javascript.html
