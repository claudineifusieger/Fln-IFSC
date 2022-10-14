##Clone o projeto

git clone https://github.com/claudineifusieger/Fln-IFSC.git

##Acesse o projeto

cd /seuprojeto

##Instale as dependências e o framework

composer install 

composer update

##Copie o arquivo .env.example

cp .env.example .env

##Crie uma nova chave para a aplicação

php artisan key:generate

##Em seguida você deve configurar o arquivo .env e rodar as migrations com:

php artisan migrate --seed

##Em relação ao npm, isso varia de projeto para projeto, mas provavelmente você também vai precisar rodar os seguintes comandos:

npm install

npm run dev

php artisan storage:link

php artisan vendor:publish

##################################################

##Enviar projeto para o git hub

##Acesse o projeto

cd /seuprojeto

##Verificar status

git status

##adicione os arquivos atualizados

git add .

##Verificar status

git status

##Adiciona um comentario

git comit -m 'comentario'

##Envia para o git hub

git push origin master   

##Se der erro no envio tente isso

git push -f origin master