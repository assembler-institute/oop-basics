`#php` `#oop` `#master-in-software-engineering`

# Assembler School: OOP Basics with PHP <!-- omit in toc -->

In this project you will learn the basics of OOP using mobile devices as a reference. In the _"Project files"_ section you will find a description of the content to be displayed in each file.

## Table of contents

- [Table of contents](#table-of-contents)
- [Theory 📚](#theory-)
- [Getting Started](#getting-started)
- [Dependencies](#dependencies)
- [Tools](#tools)
- [OOP Introduction](#oop-introduction)
- [Project files](#project-files)

## Theory 📚

**What is object-oriented programming in general terms?**

Object-oriented programming (OOP) is a computer programming model that organizes software design around data, or objects, rather than functions and logic. An object can be defined as a data field that has unique attributes and behavior.
***

**What is a class?**

In object-oriented programming, a class is a blueprint for creating objects (a particular data structure), providing initial values for state (member variables or attributes), and implementations of behavior (member functions or methods).
***

**What is an object?**

Object is an instance of a class. An object in OOPS is nothing but a self-contained component which consists of methods and properties to make a particular type of data useful. For example color name, table, bag, barking. When you send a message to an object, you are asking the object to invoke or execute one of its methods as defined in the class.
***

**What is an instance?**

Objects and instances are mostly same, but there is a very small difference. For example: If Car is a class, 3 Cars are 3 different objects. All of these objects are instances. So these 3 cars are objects from instances of the Car class.
***

**What is a property?**

We call properties to the variables inside a class. Properties can accept values like strings, integers, and booleans (true/false values), like any other variable.
***

**What is a method?**

The classes most often contain functions. A function inside a class is called a method.
***

**What is the difference between a function and a method?**

A method is a procedure or function in OOPs Concepts. Whereas, a function is a group of reusable code which can be used anywhere in the program. This helps the need for writing the same code again and again.

Methods:
1. A method also works the same as that of function.
2. A method is defined inside a class.
3. A method can be private, public, or protected.
4. The method is invoked by its reference/object only. 
5. A method is able to operate on data that is contained within the class
6. Each object has it’s own method which is present in the class.

Functions:
1. A function is a block of statements that takes specific input, does some computations, and finally produces the output.
2. A function is defined independently.
3. By default a function is public.
4. It can be accessed anywhere in the entire program.
5. It is called by its name itself.
6. If a function is defined, it will be the same for every object that has been created.
7. 
***

**What is a constructor?**

A constructor is a special method of a class or structure in object-oriented programming that initializes a newly created object of that type. Whenever an object is created, the constructor is called automatically.
***

**What is the difference between a class, an object and an instance?**
        
| Class                                                           | Object                                                                          |
|-----------------------------------------------------------------|---------------------------------------------------------------------------------|
| A class is a template for creating objects in program.          | The object is an instance of a class.                                           |
| A class is a logical entity                                     | Object is a physical entity                                                     |
| A class doesn't allocate memory when it is created.             | Object allocates memory space whenever they are created.                        |
| You can declare class only once.	                              | You can create more than one object using a class.                              |
| Example: Car.	                                                  | Example: Jaguar, BMW, Tesla, etc.                                               |
| can't be manipulated as they aren't available in memory.        |	They can be manipulated.                                                        |	
| It doesn't have any values which are associated with the fields.|	Each and every object has its own values, which are associated with the fields. |
You can create class using "class" keyword.	                      | You can create object using "new" keyword                                       |
***

**What do we understand about the concept of encapsulation?**

Is the practice of keeping fields within a class private, then providing access to them via public methods. It’s a protective barrier that keeps the data and code safe within the class itself. This way, we can re-use objects like code components or variables without allowing open access to the data system-wide.
***

**What do we understand about the concept of abstraction?**

Abstraction means using simple things to represent complexity. We all know how to turn the TV on, but we don’t need to know how it works in order to enjoy it. In OOP, abstraction means simple things like objects, classes, and variables represent more complex underlying code and data. This is important because it lets avoid repeating the same work multiple times.
***

**What do we understand about the concept of inheritance?**

This is a special feature of Object Oriented Programming. It lets programmers create new classes that share some of the attributes of existing classes. This lets us build on previous work without reinventing the wheel.
***

**What do we understand about the concept of polymorphism?**

This OOP concept lets programmers use the same word to mean different things in different contexts. One form of polymorphism is method overloading. That’s when different meanings are implied by the code itself. The other form is method overriding. That’s when the different meanings are implied by the values of the supplied variables. See the next questions below.
***

**What do we understand about the concept of Overload?**

In method overriding, the child class can use the OOP polymorphism concept to override a method of its parent class. That allows a programmer to use one method in different ways depending on whether it’s invoked by an object of the parent class or an object of the child class.
***

**What do we understand about the concept of Override?**

Overloading in PHP provides means to dynamically create properties and methods. These dynamic entities are processed via magic methods one can establish in a class for various action types.

The overloading methods are invoked when interacting with properties or methods that have not been declared or are not visible in the current scope. 

__NOTE:__
PHP's interpretation of overloading is different than most object oriented languages. Overloading traditionally provides the ability to have multiple methods with the same name but different quantities and types of arguments.
***

**What differences exist between the concept of Overload and Override?**

In function overloading, more than one function can have same method signature but different number of arguments. But in case of function overriding, more than one functions will have same method signature and number of arguments. 
***

**What is a static class?**

Declaring class properties or methods as static makes them accessible without needing an instantiation of the class. These can also be accessed statically within an instantiated class object.
***

**Look for 3 advantages over object-oriented programming compared to other programming paradigms**

1. Improved software maintainability: For the reasons mentioned above, object-oriented software is also easier to maintain. Since the design is modular, part of the system can be updated in case of issues without a need to make large-scale changes.
2. Faster development: Reuse enables faster development. Object-oriented programming languages come with rich libraries of objects, and code developed during projects is also reusable in future projects.
3. Higher-quality software: Faster development of software and lower cost of development allows more time and resources to be used in the verification of the software. Although quality is dependent upon the experience of the teams, object-oriented programming tends to result in higher-quality software.
***

**Look for disadvantages of this paradigm.**

1. Larger program size: Object-oriented programs typically involve more lines of code than procedural programs.
2. Slower programs: Object-oriented programs are typically slower than procedure-based programs, as they typically require more instructions to be executed.
3. Not suitable for all types of problems: There are problems that lend themselves well to functional-programming style, logic-programming style, or procedure-based programming style, and applying object-oriented programming in those situations will not result in efficient programs.
***

## Getting Started

### The repo <!-- omit in toc -->

First, you will need to clone the repo:

```bash
$ git clone https://github.com/assembler-school/oop-basics.git
```

### Presentation material <!-- omit in toc -->

- [Slides](https://docs.google.com/presentation/d/1cZxutGPDqUGsLWLVen_ATjd7dEkeoPS_v_fy1y0C5Co/edit?usp=sharing)

## Dependencies

Before we can get started you will need to make sure that all the necessary dependencies are installed in your system.

### PHP <!-- omit in toc -->

You can install it by following the instructions [in the official docs](https://www.php.net/downloads) (we recommend that you install the version that is named _Current_).

To verify that you have installed it correctly, you can run the following command from the terminal that should output the version installed:

```bash
$ php -version
```

## Tools

In the event that you prefer to use a tool that installs everything you need to configure and run a PHP server, we recommend using [XAMPP](https://www.apachefriends.org/es/download.html)

### XAMPP <!-- omit in toc -->

XAMPP is a completely free and easy to install Apache distribution that contains MariaDB, PHP, and Perl. The XAMPP installation package has been designed to be incredibly easy to install and use.

<img src='./assets/img/xampp-homepage.png' width='600' alt='xampp homepage'>

You have to go to the [download page](https://www.apachefriends.org/es/download.html) and it will automatically recommend installing the latest version available.

<img src='./assets/img/xampp-download.png' width='600' alt='xampp download'>

Once downloaded and installed, in the case that the Windows operating system you will see the following screen, in which you will only have to start the Apache service.

<img src='./assets/img/xampp-app.png' width='600' alt='xampp app'>

## OOP Introduction

Object-oriented programming (OOP) is a programming paradigm based on the concept of "objects", which can contain data and code: data in the form of fields (often known as attributes or properties), and code, in the form of procedures (often known as methods).

## Project files

### [01 - Classes](./01-classes.php) <!-- omit in toc -->

The OOP paradigm encapsulates concepts of the real world in what is called as Classes which create Objects. In this file you will learn how to create a class and instanciate it.

### [02 - Properties](02-properties.php) <!-- omit in toc -->

Class member variables are called properties. In this file, you will learn how to add properties to a class and get them when the class is instantiated.

### [03 - Methods](03-methods.php) <!-- omit in toc -->

Properties define the characteristics of an object and the methods (functions in a class are called methods) which define the behavior of the Class. In this file you will learn how to create methods inside a class.

### [04 - Getters](04-getters.php) <!-- omit in toc -->

The get method returns the attribute value, usually there is a get method for each attribute of the class. In this file you will learn how to create **getter** methods.

### [05 - Setters](05-setters.php) <!-- omit in toc -->

The set method sets the attribute value, usually there is a get method for each attribute of the class. In this file you will learn how to create **setter** methods.

### [06 - Constructors](06-constructors.php) <!-- omit in toc -->

A constructor allows you to initialize an object's properties upon creation of the object. In this file you will learn how to create the constructor method.

### [07 - Inheritance problem](07-inheritance-problem.php) <!-- omit in toc -->

There are several disadvantages of not applying inheritance in our code. In this file you will lean what's the problem if you don't apply any inheritance in your code.

### [08 - Inheritance soluction](08-inheritance-solution.php) <!-- omit in toc -->

The child class will inherit all the public and protected properties and methods from the parent class. In addition, it can have its own properties and methods. In this file you will learn how to apply the inheritance in your code.

### [09 - Public, private & protected](09-public-private-protected.php) <!-- omit in toc -->

Properties and methods can have access modifiers which control where they can be accessed. In this file you will learn le three access modifiers.

### [10 - Static](10-static.php) <!-- omit in toc -->

Static properties and methods can be called directly - without creating an instance of the class first. In this file you will learn how to use static properties and methods.

### [11 - Const](11-const.php) <!-- omit in toc -->

Constants cannot be changed once it is declared. Class constants can be useful if you need to define some constant data within a class. In this file you will learn how to create constants within a class.

### [12 - Abstract classes](12-abstract-classes.php) <!-- omit in toc -->

Abstract classes and methods are when the parent class has a named method, but need its child class(es) to fill out the tasks. In this file you will learn how to create and use abstract classes.

### [13 - Interfaces](13-interfaces.php) <!-- omit in toc -->

Interfaces allow you to specify what methods a class should implement.
Interfaces make it easy to use a variety of different classes in the same way. When one or more classes use the same interface, it is referred to as "polymorphism". In this file you will learn how to create and extend interfaces.

### [14 - Overriding](14-overriding.php) <!-- omit in toc -->

In function overriding, both parent and child classes should have same function name with and number of arguments. In this file you will learn how to implement overriding.

### [15 - Overloading](15-overloading.php) <!-- omit in toc -->

Function overloading contains same function name and that function preforms different task according to number of arguments. In this file you will learn how to implement overloading.

### [16 - Namespaces](16-namespaces.php) <!-- omit in toc -->

Namespaces are qualifiers that solve two different problems:

1. They allow for better organization by grouping classes that work together to perform a task
2. They allow the same name to be used for more than one class

In this file you will learn how to create and use namespaces.
