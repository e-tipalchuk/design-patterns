**Пул Объектов** (англ. **Object pool**) - это хеш, в который можно складывать
инициализированные объекты и доставать их оттуда при необходимости. По сути, является
частным случаем реестра.

Хранение объектов в пуле может заметно повысить производительность, когда
стоимость инициализации экземпляра класса высока, скорость экземпляра класса высока,
а количество одновременно используемых экземпляров в любой момент времени является низкой.
Время на извлечение объекта из пула легко прогнозируется, в отличие от создания новых
объектов (особенно с сетевым оверхедом), что занимает неопределённое время.

**Применение:**
* Информация о видимых объектах во многих компьютерных играх. Эта информация актуальна
только в течение одного кадра;
* Соединения с базами данных;
* Соединения сокетов;
* Инициализация больших графических объектов, таких как шрифты или растровые изображения

В нашей закусочной есть отдел кадров. Так же есть один
разнорабочий, и он свободен. Появилась какая-то задача, которую нужно выполнить. Мы говорим
отделу кадров: "Дайте нам рабочего". Отдел кадров смотрит, есть ли свободные рабочие. Если
есть, отдаёт нам одного рабочего и помечает его, как занятого.

**Примечание:**
* После того, как объект возвращён, он должен вернуться в состояние, пригодное для
дальнейшего использования. Если объекты после возвращения в пул оказываются в неправильном
или неопределённом состоянии, такая конструкция называется **Объектной Клоакой** (англ. **Object
Cesspool**).
* Повторное использование объектов также может привести к утечке информации. Если в объекте
есть секретные данные (например, номер кредитной карты), после освобождения объекта эту
информацию надо затереть.
