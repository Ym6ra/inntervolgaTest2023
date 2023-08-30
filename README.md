# inntervolgaTest2023
Для запуска сборки необходим docker & docker compose;
- в папке проекта запустить контейнеры командой `docker-compose up -d`;
- вход в контейнер `docker-compose exec app bash`;
- обновление и скачивание vendor `composer install`;
- Создание базы данных для 3го задания `php spark midrate`;
- Наполнение базы тестовыми данными `php spark db:seed`;
- Создание сервера `php spark serve`;
# Примечание
- Просмотр сайта по ссылке http://lockalhost;
- На страницах с заданиями сразу представлен php код данной страницы;
- Для 3го задания весь код js вынесен в skripts.js в папке public;

