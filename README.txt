RU:
Хотелось бы объяснить выбор необходимых технологий.
Так как мы имеем небольшой файл с данными и несложную функциональность - было решено делать всё на нативном PHP. Потому как при таких объёмах данных все будет работать достаточно быстро.
Если же база возрастёт и будет расширяться функционал, во-первых было бы неплохо сделать синхронизацию файла json с базой данных к примеру mysql, для более быстрого доступа к данным и реализации поиска.
На входе будет файл json последней "свежести" товаров, и будем обновлять базу в соответствии с новыми дополнениями.
Клиентская часть - нативный JS также из-за отсутсвия какого-либо сложного функционала.

EN:
I would like to explain the choice of the necessary technology.
Since we have a small data file and simple functionality - it was decided to do everything to native PHP. Because at such volumes of data it will work fast enough.
If the database will grow and to expand functionality, firstly it would be nice to make a json file synchronization with the database eg mysql, for faster access to data and the implementation of the search.
At the entrance is the last file json "freshness" of the goods, and will be updating the database in accordance with the new additions.
Client part - native JS also because of the lack of a functional complex.