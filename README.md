**Примеры Laravel 6.3.**

Разворачивание:
1. git clone
2. composer install
3. Задать свои конфиги в .env
4. artisan migrate:refresh --seed 
5. npm install + npm run dev

Реализованно:
1. Разделы.
2. Товары.
3. Отношение «многие ко многим» для разделов и товаров.
4. Миграции, сиды.
5. Концептуальный пример построения объекта фильтра App\Builders\Filter.
6. Ресурсный роутер '/sections'.
7. Контроллер App\Http\Controllers\Catalog\SectionController.
8. Просмотр, добавление, редактирование, удаление разделов.
9. Дерево разделов.
9. Простейший вывод в шаблон.

![alt text](storage/app/public/upload/screenshot_laravel_ex_1.png)
![alt text](storage/app/public/upload/screenshot_laravel_ex_2.png)
![alt text](storage/app/public/upload/screenshot_laravel_ex_3.png)
