
INSERT INTO categories SET allas = 'boards', title = 'Доски и лыжи';
INSERT INTO categories SET allas = 'attachment', title = 'Крепления';
INSERT INTO categories SET allas = 'boots', title = 'Ботинки';
INSERT INTO categories SET allas = 'clothing', title = 'Одежда';
INSERT INTO categories SET allas = 'tools', title = 'Инструменты';
INSERT INTO categories SET allas = 'other', title = 'Разное';

INSERT INTO users SET username = 'Олег', email = 'oleg123@mail.ru', password = '123098';
INSERT INTO users SET username = 'Алексей', email = 'lexa228@mail.ru', password = '111111';
INSERT INTO users SET username = 'Виталий', email = 'VITYA112@mail.ru', password = '1576';

INSERT INTO lots SET id = '1', title = 'хз инфа какаята', description = 'а тут крутое описание', date_create = '', start_price = '122', image_url = 'photo', end_date = '', bet_step = '200', user_id = '1', category_id = '1', winner_id = '1', bet_price = '4';
INSERT INTO lots SET id = '2', title = 'йцувфцв', description = '123fre123', date_create = '', start_price = '2332', image_url = 'url', end_date = '', bet_step = '223', user_id = '2', category_id = '2', winner_id = '2', bet_price = '2';
INSERT INTO lots SET id = '3', title = 'цуйыфвцфы', description = 'фцвцфвфы', date_create = '', start_price = '6777', image_url = 'url', end_date = '', bet_step = '56', user_id = '3', category_id = '3', winner_id = '3', bet_price = '90';

INSERT INTO bets SET id = '1',  bet_date = '', bet_price = '2', user_id = '1', lot_id = '2';
INSERT INTO bets SET id = '12', bet_date = '', bet_price = '23', user_id = '2', lot_id = '2';
INSERT INTO bets SET id = '13', bet_date = '', bet_price = '24', user_id = '3', lot_id = '3';

/* Получить список из всех категорий */
SELECT title FROM categories;

/*  */