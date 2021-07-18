`#php` `#oop` `#master-in-software-engineering`

# Assembler School: OOP Basics with PHP <!-- omit in toc -->

In this project you will learn the basics of OOP using mobile devices as a reference. In the _"Project files"_ section you will find a description of the content to be displayed in each file.

## Table of contents

- [Table of contents](#table-of-contents)
- [Getting Started](#getting-started)
- [Dependencies](#dependencies)
- [Tools](#tools)
- [OOP Introduction](#oop-introduction)
- [Investigation](#investigation)
- [Project files](#project-files)

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

## Investigation
* What is object-oriented programming in general terms?
> programming paradigm that relies on the concept of classes and objects. It is used to structure a software program into simple, reusable pieces of code blueprints (usually called classes), which are used to create individual instances of objects.
* What is a class?
> Extensible program-code-template used to create objects, providing initial values for state (member variables) and implementations of behavior (member functions or methods).
* What is an object?
> An object is a copy of the class, but its properties are assigned values at the moment of delcaration using the constructor method.
* What is an instance?
> Memory space assigned to store an object of a class. It is also the identifier of the object, in other words, it is also variable name of the object.
* What is a property?
> Variable contained inside the class code. They can have a default value assigned or not. That will always depend on the programmer's needs and the objective of the class. It is also important when declaring a property to add a visibility keyword before their name so as to avoid or allow specific access to it. 
* What is a method?
> Function contained inside of a class code. It can only be called via class objects or if the class is an static one, then the only way to call the method is by using the class name itself.
* What is the difference between a function and a method?
> Functions are snippets of code that can be called by their name and be executed. They can receive data as parameters if they require it and they are able to return data if they need to with a return statement.
>
> Methods, operate the same way as fucntions, but with two main differences:
> 
> * Methods can only be called via an object of the class or if the class is an static one via the class name.
> * Methods can receive both class properties and variables outside the class as parameters if they need too, whereas functions cannot interact with class properties directly.
* What is a constructor?
> Method used to initialize the values of properties of a class object if required. There can be empty constructor methods, which would mean no initial values are assigned to the class object properties. The constructor method is called everytime an object is created.
* What is the difference between a class, an object and an instance?
> - **CLASS**: template of code.
> - **OBJECT**: copy of class with maybe specific initial values assigned to class properties.
> - **INSTANCE**: memory space reserved to store the object and variable name of it.
* What do we understand about the concept of encapsulation?
> Ability to allow or prevent interactions between different objects properties and methods. To do so the visibility keywords are used when declaring the class properties and methods of any class. The visibility words are meant to prevent undesired access from outside objects.
* What do we understand about the concept of abstraction?
> Programmer's ability to understand the problem to solve to be able to create classes that have only what is necessary. In other words, desigining each class, which will be used to create objects later, with only the properties and methods that are required to accomplish its objective.
* What do we understand about the concept of inheritance?
> Ability to reuse a class code using the keyword **extends** just after the class name and then add then add the parent class name after **extends**. Inheritance allows the total reusability of the parent class and also the addition of new properties and methods. The main idea is to create a **new class** using the parent one as a basis to avoid repeating code.
* What do we understand about the concept of polymorphism?
> Ability of different classes to share the same method, but each one having a different implementation for it. This is usually accomplished via using interface classes, which are a type of class that is meant to establish methods that will need to be implemented by every class that inherits the interface class. interface class inheritance is different to normal inheritance and it is done by adding the keyword **implements** after the class name and then adding the interface class name after the word **implements**. Normal inheritance and interface class inheritance are not mutually-exclusive. There might be cases in which both are used at the same time. If that happened to be the case the word **implements** would be added just after the normal inheritance class name.
* What do we understand about the concept of Overload?
> Overloading a method simply means two or more methods have the same method name with different arguments or parameters(compulsory) and return type(not necessary).
* What do we understand about the concept of Override?
> Overriding a method simply means that a subclass redefines its inherited method(s) when it needs to change or extend the behavior of that method.
* What differences exist between the concept of Overload and Override?
> Method overloading happens when the same class shares the same method name but each method should have different number of parameters or parameters having different types and order, whereas in method overriding the derived class has the same method with same name and exactly the same number and type of parameters and same return type as a parent class.
* What is a static class?
> Class that is not meant to have any object instanced of it. Static classes are meant to store some properties and methods and have them called using the class name.
* Look for 3 advantages over object-oriented programming compared to other programming paradigms
> hello
* Look for disadvantages of this paradigm.
> hello
> 
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

