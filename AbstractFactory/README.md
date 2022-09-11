Abstract Factory is a creational design pattern that lets you produce families of related objects without specifying their concrete classes.

Problem : Imagin that you make a web page that show the properties of every country like: climate, special food and so on. If you design a single class for every country , you will havel problem to add a new propery. Also you can not have single class for every property.

Solution : Create an interface for every property (climate, special food, languge,...). Then you can make all variants of countries follow those interfaces and develope their property. next move is to create build an interface so that they all have common methods. This interface is Abstract Factroy and for last step you should create class for every country and implement the Abstract Factory.

The example of this design pattern are ready by php and laravel framework.
