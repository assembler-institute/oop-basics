`#php` `#oop` `#master-in-software-engineering`
# ¿Que es el OOP?
### Es un paradigma de programación que se basa en la practica de combinar  funcioniones y variables relacionadas , combirtiendolas en una sola unidad.


# ¿Que es una classe?
### Estas unidades son lo que llamamos una classe, es donde encapsulamos una serie de funciones y variables.

# ¿Que es un Objeto?
### El objeto es el elemento que surge cuando se le da un valor concreto  a las funciones y variables de esa clase. Entonces podemos concluir que una classe es la abstracción de un objeto, o también , la classe es el molde del cual se forma el objeto.

# ¿Que es una instancia?
### La instancia , es la asignación de tal objeto a un espacio de memoria, el cual nos va a permitir a acceder a métodos y propiedades de la classe de la que proviene el objeto.

# ¿Que es una propiedad?
 
### las propiedades son las variables encapsuladas en la classe(veasé pregunta 1 )

# ¿Que es un método?
### Los métodos son las funciones que están encapsuladas en la classe.
(veasé pregunta 1 )

# Diferencia funcion y metodo:
### Una función es una unidad que encapsula instrucciones (acciones), igual que un método.Los métodos son las funciones(acciones),que se encapsula en nuestra classe.

# ENCAPSULACIÓN 
### Es la práctica de agrupar propiedades y métodos de un objeto, para que solo se puedan modificar  dentro. ocultas los “miembros de la classe”.Se crea un scope determinado dependiendo de los modificadores de acceso, que son keyWords(Public, private, protected),

# ABSTRACTIÓN 
### esconde toda la información que no resulta relevante y que solo va a usarse dentro del objeto donde se declara.

# INHERITANCE
### Es la capacidad de una classe de recibir métodos y propiedades de otra classe, a esta última nos referiremos como a la classe padre. como hemos explicado más arriba llamaremos al constructor de la classe padre para heredar sus atributos

# POLYMORPHISM
### Es la capadcidad del objeto de ser modificado y de adoptar formas determinadas.

# Overload
### Otra forma de polymorphismo es “Overload” con el método overloading podemos redefinir los parámetros de un método existente, manteniendo el nombre de dicho método, y sin la necesidad de heredar.

# Overload
### Overriding un metododo consiste en crear una subclase donde heredas el metodo de la classe padre ,para modificar tal metodo.

# Diference Overload Overload:
### necessita heredar el método para incidir en él por lo tanto actúa siempre dentro de su scope, Overload puede acceder a los métodos desde cualquier lugar sin necesidad de heredar. Esta es la diferencia principal que provoca otras derivadas, como que Override debe tener el mismo typado que el método que sobre escribe, los mismos parámetros.a diferencia de Overload.

# Static class:
### cuando una classe o un método es static , este puede ser llamado sin necesidad de crear una instancia.Pongamos el caso,  de una subclasse statica dentro de una classe, esta subclasse al ser “static” podrá ser llamada sin necesidad de instanciar a su classe padre, de lo contrario sería necesario hacer una instancia de su classe padre, lo mismo ocurre con los métodos.Esta práctica nos ahorra el uso innecesario de memoria en , ya que cuando instancias una classe , estamos almacenando toda la classe, con el uso de static , requerimos solo lo necesario.

# Ventajas:
### Una de las principales ventajas y el sentido de la  oop es su capacidad de modular. Permite la división de problemas en pequeñas partes.Programar bajo este paradigma exige un orden en la escritura del código, un formato que es universal, una exigencia de definir tapados, por ejemplo..Se puede ahorrar bastante código gracias a la aplicación de conceptos como la herencia y el poliymorfismo. Conceptos como la encapsulación, hacen de un código escrito bajo este paradigma que sea reutilizable, ya que agrupa una serie atributos y acciones bajo un mismo nombre identificativo.y mediante la abstracción se simplifica la lectura para terceros.

# Desventajas:
### Para tareas fáciles, no es recomendable trabajar bajo este paradigmas, ya que la complejidad que exige solo no sale cuenta.Por ejemplo para webs solo de lectura o informativas , donde haya poca interactividad y poco flujo de datos..Trabajar con poo implica una curva de aprendizaje bastante pronunciada para programadores iniciados.Los procesos de ejecución pueden demorarse más, que con la clásica programación estructurada.Estas unidades se llaman objetos, la variables, propiedades y las funciones métodos.-esto define uno de los pilares que sostienen poo, la encapsularon-otro pilar es la Abstracción, es la par chica de esconder ciertos componentes del objeto de forma de que estos solo existan dentro de tal objeto-inherit to eliminante renundant code.




# Assembler School: OOP Basics with PHP <!-- omit in toc -->

In this project you will learn the basics of OOP using mobile devices as a reference. In the _"Project files"_ section you will find a description of the content to be displayed in each file.

## Table of contents

- [Table of contents](#table-of-contents)
- [Getting Started](#getting-started)
- [Dependencies](#dependencies)
- [Tools](#tools)
- [OOP Introduction](#oop-introduction)
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



