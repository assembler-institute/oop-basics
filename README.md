`#php` `#oop` `#basics` `#master-in-software-engineering`

# OOP Basics<!-- omit in toc -->

> This is a pill cretaed to learn how the Object Oriented Programming works.

### Main objetives:

- Understand what it is OOP.
- Learn to work with classes, abstraction, methods, instances, etc.

## Index <!-- omit in toc -->

- [Starting 🚀](#starting-)
- [Theory 📚](#theory-)
- [Requirements📋](#requirements)
- [Tools and tecnologies used 🛠️](#tools-and-tecnologies-used-️)
- [Project requirements 📏](#project-requirements-)
- [Resources](#resources)

## Starting 🚀

This is just an example of how OOP works. Here I have implemented everything necessary to create an abstract class called Device, I extend it on the Mobile and Tablet classes and implement a few methods to get their Id, brand, model, screen size and serial number. Then I've created the interface and a class where I implement that interface and an example by instanciating the two main classes. So if you run the pill folder's index.php file on a local server environment, you'll see the result of those properties and methods.

## Theory 📚

1.  **What is object-oriented programming in general terms?**

    Object-oriented programming (OOP) is a computer programming model that organizes software design around data, or objects, rather than functions and logic. An object can be defined as a data field that has unique attributes and behavior.

2.  **What is a class?**

    In object-oriented programming, a class is an extensible program-code-template for creating objects, providing initial values for state (member variables) and implementations of behavior (member functions or methods).

3.  **What is an object?**

    Each object is said to be an instance of a particular class (for example, an object with its name field set to "Mary" might be an instance of class Employee).

4.  **What is an instance?**

    In a computer system, any time a new context is created based on some model, it is said that the model has been instantiated. In practice, this instance usually has a data structure in common with other instances, but the values stored in the instances are separate. Changing the values in one instance will then not interfere with the values of some other instance.

5.  **What is a property?**

    Properties are characteristics or attributes of an object. An example of an object is a person. A person will have attributes (properties) such as name, gender, age, height, and weight. These attributes are used to describe a person.

6.  **What is a method?**

    An object consists of data and behavior. Data is represented as properties of the object and behaviors are represented as methods. For example, a Window object could have methods such as open and close. The methods are implemented as functions inside an object.

7.  **What is the difference between a function and a method?**

    A function is a piece of code that is called by name. It can be passed data to operate on (i.e. the parameters) and can optionally return data (the return value). All data that is passed to a function is explicitly passed.

    A method is a piece of code that is called by a name that is associated with an object.

8.  **What is a constructor?**

    A constructor is a special type of subroutine called to create an object. It prepares the new object for use, often accepting arguments that the constructor uses to set required member variables.

    A constructor resembles an instance method, but it differs from a method in that it has no explicit return type, it is not implicitly inherited and it usually has different rules for scope modifiers.

9.  **What is the difference between a class, an object and an instance?**

    A class is a template for creating objects in program.

    The object is an instance of a class.

    An instance is a new context created based on some model.

10. **What do we understand about the concept of encapsulation?**

    In object-oriented computer programming languages, the notion of encapsulation (or OOP Encapsulation) refers to the bundling of data, along with the methods that operate on that data, into a single unit.

11. **What do we understand about the concept of abstraction?**

    Abstraction occurs when a programmer hides any irrelevant data about an object or an instantiated class to reduce complexity and help users interact with a program more efficiently.

12. **What do we understand about the concept of inheritance?**

    Inheritance is a mechanism that allows one class to gain the properties of another class, in the same way, that a child inherits some attributes from each of their parents. Inheritance allows programmers to create a new class that reuses the data members and methods of an existing class.

13. **What do we understand about the concept of polymorphism?**

    Polymorphism is the method in an object-oriented programming language that performs different things as per the object’s class, which calls it. With Polymorphism, a message is sent to multiple class objects, and every object responds appropriately according to the properties of the class.

14. **What do we understand about the concept of Overload?**

    Overloading occurs when two or more methods in one class have the same method name but different parameters.

15. **What do we understand about the concept of Override?**

    Overriding occurs when two methods have the same method name and parameters. One of the methods is in the parent class, and the other is in the child class. Overriding allows a child class to provide the specific implementation of a method that is already present in its parent class.​

16. **What differences exist between the concept of Overload and Override?**

    In function overloading, more than one function can have same method signature but different number of arguments. But in case of function overriding, more than one functions will have same method signature and number of arguments.

17. **What is a static class?**

    A static class is a type of class which is instantiated only once in a program. It must contain a static member (variable) or a static member function (method) or both. The variables and methods are accessed without the creation of an object, using the scope resolution operator(::)

18. **Look for 3 advantages over object-oriented programming compared to other programming paradigms**

    1. Improved software maintainability: For the reasons mentioned above, object-oriented software is also easier to maintain. Since the design is modular, part of the system can be updated in case of issues without a need to make large-scale changes.

    2. Faster development: Reuse enables faster development. Object-oriented programming languages come with rich libraries of objects, and code developed during projects is also reusable in future projects.

    3. Higher-quality software: Faster development of software and lower cost of development allows more time and resources to be used in the verification of the software. Although quality is dependent upon the experience of the teams, object-oriented programming tends to result in higher-quality software.

19. **Look for disadvantages of this paradigm.**

    1. Larger program size: Object-oriented programs typically involve more lines of code than procedural programs.

    2. Slower programs: Object-oriented programs are typically slower than procedure-based programs, as they typically require more instructions to be executed.

    3. Not suitable for all types of problems: There are problems that lend themselves well to functional-programming style, logic-programming style, or procedure-based programming style, and applying object-oriented programming in those situations will not result in efficient programs.

## Requirements📋

To run this project you need yo have a local server environment installed in your computer. Such as MAMP or XAMPP. View more info on [MAMP's website](https://www.mamp.info/en/).

## Tools and tecnologies used 🛠️

- PHP
- HTML

## Project requirements 📏

- You must make use of object-oriented programming using PHP.
- Create a clear and orderly directory structure
- Both the code and the comments must be written in English
- Use the camelCase code style to define variables and functions
- Remember that it is important to divide the tasks into several sub-tasks so that in this way you can associate each particular step of the construction with a specific commit
- You should try as much as possible that the commits and the planned tasks are the same
- Delete files that are not used or are not necessary to evaluate the project

## Resources

- [PHP OOP](https://www.php.net/manual/en/language.oop5.php)

- [Object-oriented programming article](https://www.guru99.com/object-oriented-programming.html)

- [Interfaces](https://www.cs.utah.edu/~germain/PPS/Topics/interfaces.html)

- [Overriding vs overloading](https://stackoverflow.com/questions/2994758/what-is-function-overloading-and-overriding-in-php)
