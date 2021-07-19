`#php` `#oop` `#master-in-software-engineering`

# OOP Basics with PHP <!-- omit in toc -->

In this project you will learn the basics of OOP using mobile devices as a reference. In the _"Project files"_ section you will find a description of the content to be displayed in each file.

## Table of contents

- [Getting Started](#getting-started)
  - [The repo](#the-repo)
  - [Presentation material](#presentation-material)
  - [OOP Introduction](#oop-introduction)
- [Cheatsheet](#cheatsheet)
- [Questions](#questions)
- [Doubt](#doubt)
- [Dependencies](#dependencies)
  - [PHP](#php)
  - [XAMP/MAMP](#xamp/mamp)
- [Resources](#resources)
- [Contribuitors](#contribuitors)

## Getting Started

### The repo <!-- omit in toc -->

First, you will need to clone the repo:

```bash
$ git clone https://github.com/Ricard-Garcia/oop-basics
```

### Presentation material <!-- omit in toc -->

- [Slides](https://docs.google.com/presentation/d/1cZxutGPDqUGsLWLVen_ATjd7dEkeoPS_v_fy1y0C5Co/edit?usp=sharing)

## OOP Introduction

Object-oriented programming (OOP) is a programming paradigm based on the concept of "objects", which can contain data and code: data in the form of fields (often known as attributes or properties), and code, in the form of procedures (often known as methods).

## Cheatsheet

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

## Questions

**What is object-oriented programming in general terms?**

> OOP is the programming paradigm that allows the developer to encapsulate reusable pieces of code as a blue print. It relies on classes and objects that can share their atrributes (properties) and behaivours (methods).

**What is a class?**

> A class is the blueprint that encapsulate the generic piece of code defining the possible properties and methods.

**What is an object?**

> An object is the actual piece individual piece of code that is build out of a template class and that can use and manipulate data with the given properties and methods from the classes.

**What is an instance?**

> It is an actual occurrence of an object. It can be a synonym of "object".

**What is a property?**

> A property of a class that will be used as a property of an object/instance.

**What is a method?**

> A function declared inside a class that will be a method of an object. A method is a behaivour of a class and its instances.

**What is the difference between a function and a method?**

> Functions can be defined either inside or outside a class while methods are functions created inside classes.

**What is a constructor?**

> It is the function that enables the class to link the defined properties and methods to the resultant object and initializes it.

**What is the difference between a class, an object and an instance?**

> A class is the generic construction of this piece of code while an object is the actual functional piece of code. An instance is the particular occurrence of an object but it can be a synonym of object too.

**What do we understand about the concept of encapsulation?**

> The idea of grouping blocks of code that can be reusable while generating objects out of them.

**What do we understand about the concept of abstraction?**

> The idea of working on blocks of code that encapsulate attributes and behaviours of generic ideas.

**What do we understand about the concept of inheritance?**

> The idea of creating pieces of code that use attributes and methods from a parent piece of code.

**What do we understand about the concept of polymorphism?**

> The idea of object-oriented code to create a pattern that allows a class to vary its functionality depending on the context.

**What do we understand about the concept of Overload?**

> Creating properties and methods of a class dynamically. When overloading, we are setting properties and methods outside a class and set them in just a specific instance of it.

**What do we understand about the concept of Override?**

> Reassign properties and methods of a class dynamically. When overridding, we are setting properties and methods outside a class and set them in just a specific instance of it.

**What differences exist between the concept of Overload and Override?**

> The first one creates unexistant properties and methods while the second one the reassign the functionality of a class from a child.

**What is a static class?**

> It is a class whose properties and methods can be called outside of it without the need of creating an object instance out of it.

**Look for 3 advantages over object-oriented programming compared to other
programming paradigms**

> - Escalable.
> - Structured workflow.
> - Abstract code.

**Look for disadvantages of this paradigm.**

> - Too structurally strict.
> - Steep learning curve.
> - Lots of memory spaces.

## Doubts

- Can be orverload and override be done from a child (not from an instance).

## Dependencies

Before we can get started you will need to make sure that all the necessary dependencies are installed in your system.

### PHP <!-- omit in toc -->

You can install it by following the instructions [in the official docs](https://www.php.net/downloads) (we recommend that you install the version that is named _Current_).

To verify that you have installed it correctly, you can run the following command from the terminal that should output the version installed:

```bash
$ php -version
```

### XAMP/MAMP

For this project you must have [XAMP](https://www.apachefriends.org/index.html)
or [MAMP](https://www.mamp.info/en/windows/) (better for MacOs systems) installed so that you can start a local server in which execute php files and load data from a database.

You won't need to worry about MySQL interaction since both Apps will provide you this service.

## Resources 👀

- [MAMP](https://www.mamp.info/en/windows/)

## Contributors ✨

👤 [Ricard Garcia](https://github.com/Ricard-Garcia)
