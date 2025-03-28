🐕
#PHP Array Manipulation Utility 

Этот проект содержит простую утилиту для манипуляции массивами на PHP. Основная функция apply позволяет выполнять различные операции с массивом, такие как сброс, удаление элементов или изменение их значений. 

##Функция apply предоставляет следующие возможности: 
    Сброс массива : Полностью очищает массив.
    Удаление элемента : Удаляет элемент по указанному индексу.
    Изменение элемента : Заменяет значение элемента по указанному индексу.

###Параметры функции 

Функция apply принимает следующие параметры: function apply(array $cities, string $operation, int|null $index = null, string|null $city = null): array|null
$cities (array): Исходный массив, над которым выполняется операция.
$operation (string): Тип операции. Допустимые значения:
'reset': Сбрасывает массив (очищает его).
'remove': Удаляет элемент по указанному индексу.

####Любой другой строковый параметр: Изменяет значение элемента по указанному индексу.     
    $index (int|null): Индекс элемента для операций 'remove' или изменения. По умолчанию null.
    $city (string|null): Новое значение для операции изменения. По умолчанию null.

#####Функция возвращает: 
    Модифицированный массив (array) после выполнения операции.
    null, если операция не может быть выполнена.
     
######Например
1.Исходный массив: $cities = ['moscow', 'london', 'berlin', 'porto'];
2.Замена первого элемента ('moscow') на 'miami': print_r(apply($cities, 'change', 0, 'miami'));
3.Результат: 
Array
(
    [0] => miami
    [1] => london
    [2] => berlin
    [3] => porto
)
👴