Adapter is a structural design pattern that allows objects with incompatible interfaces to collaborate.

Problem : Imagin that you wrote a program and now you want to add a new library and use the output of library for a method in you program. suddenly you understand that the output of the library not propert for the input of your method. If you want to change the type of your input, you may be in trouble.

Solution : You can use an adapter. Adapter is a class that takes an incompatible object and delivers a compatible object to the program so that the program can safely work with your external library. 
