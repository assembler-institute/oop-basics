`#php` `#oop` `#master-in-software-engineering`

# Assembler School: OOP Basics with PHP <!-- omit in toc -->

In this project we created PHP OOP logic with diferent types of Classes using mobile devices as a reference.

In the _"exampels"_ folder you will find exampels of PHP OOP clases and functionality.
In the _"exercices"_ folder you will find the files with the Classes and functions.
<br/>
<br/>

# Questions

What is object-oriented programming in general terms?

```
Object-oriented programming (OOP) is a computer programming model that organizes software design around data, or objects, rather than functions and logic. An object can be defined as a data field that has unique attributes and behavior.

OOP focuses on the objects that developers want to manipulate rather than the logic required to manipulate them.
```

What is a class?

```
In object-oriented programming, a class is a blueprint for creating objects (a particular data structure), providing initial values for state (member variables or attributes), and implementations of behavior (member functions or methods).

The user-defined objects are created using the class keyword. The class is a blueprint that defines a nature of a future object. An instance is a specific object created from a particular class. Classes are used to create and manage new objects and support inheritance—a key ingredient in object-oriented programming and a mechanism of reusing code.
```

What is an object?

```
 An Object is an individual instance of the data structure defined by a class. We define a class once and then make many objects that belong to it. Objects are also known as instances.
```

What is an instance?

```
An instance is a concrete occurrence of any object, existing usually during the runtime of a computer program. Formally, "instance" is synonymous with "object" as they are each a particular value (realization), and these may be called an instance object; "instance" emphasizes the distinct identity of the object. The creation of an instance is called instantiation.
```

What is a property?

```
Properties are as in everyday language and technically are fields of objects/classes with dedicated getter/setter routines (which can be considered as methods).
```

What is a method?

```
Methods ("member functions") are similar to functions, they belongs to classes or objects and usually expresses the verbs of the objects/class. For example, an object of type Window usually would have methods open and close which do corresponding operations to the object they belong.
```

What is the difference between a function and a method?

```
A method, like a function, is a set of instructions that perform a task. The difference is that a method is associated with an object, while a function is not.

```

What is a constructor?

```
A constructor is a special method used to initialize objects.
we use constructors to initialize all variables in the class
when an object is created. As and when an object
is created it is initialized automatically passing the data to
the constructor parameters.
```

What is the difference between a class, an object and an instance?

```
The Class is a “template” / “blueprint” that is used to create objects.
Real world objects shares 2 main characteristics, state and behavior. Human have state (name, age) and behavior (running, sleeping). They consist of state and related behavior wiche is given by the Class.
An instance is a unique copy of a Class that representing an Object, wiche is given by the constructor of the class Object. When a new instance of a class is created, the proccesing engine will allocate a room of memory for that class instance.

```

What do we understand about the concept of encapsulation?

```
Encapsulation is one of the fundamentals of OOP (object-oriented programming). It refers to the bundling of data with the methods that operate on that data. Encapsulation is used to hide the values or state of a structured data object inside a class, preventing unauthorized parties’ direct access to them
```

What do we understand about the concept of abstraction?

```
Abstraction is one of the key concepts of object-oriented programming (OOP) languages. Its main goal is to handle complexity by hiding unnecessary details from the user. That enables the user to implement more complex logic on top of the provided abstraction without understanding or even thinking about all the hidden complexity.
```

What do we understand about the concept of inheritance?

```
it is used to define relationship between two class,
which a child class occurs all the properties and
behaviours of a parent class.
Provides code reusability. We can implement by using
extend keyword
```

What do we understand about the concept of polymorphism?

```
Polymorphism is the method in an object-oriented programming language that performs different things as per the object's class, which calls it. With Polymorphism, a message is sent to multiple class objects, and every object responds appropriately according to the properties of the class.
```

What do we understand about the concept of Overload?

```
AnswerOverloading happens when you have two methods with the same name but different signatures (or arguments). In a class we can implement two or more methods with the same name.
```

What do we understand about the concept of Override?

```
Overriding is a feature that enables a child class to provide different implementation for a method that is already defined and/or implemented in its parent class or one of its parent classes.
```

What differences exist between the concept of Overload and Override?

```
1. Overriding implements Runtime Polymorphism whereas Overloading implements Compile time polymorphism.

2. The method Overriding occurs between superclass and subclass. Overloading occurs between the methods in the same class.

3. Overriding methods have the same signature i.e. same name and method arguments. Overloaded method names are the same but the parameters are different.

4. With Overloading, the method to call is determined at the compile-time. With overriding, the method call is determined at the runtime based on the object type.

5. If overriding breaks, it can cause serious issues in our program because the effect will be visible at runtime. Whereas if overloading breaks, the compile-time error will come and it’s easy to fix.
```

What is a static class?

```
Static classes are sealed and therefore cannot be inherited. They cannot inherit from any class except Object. Static classes cannot contain an instance constructor. However, they can contain a static constructor.
```

Look for 3 advantages over object-oriented programming compared to other programming paradigms

```
1.Modularity for easier troubleshooting

When working with object-oriented programming languages, you know exactly where to look. “Oh, the car object broke down? The problem must be in the Car class!” You don’t have to muck through anything else.

2.Reuse of code through inheritance

Suppose that in addition to your Car object, one colleague needs a RaceCar object, and another needs a Limousine object. Everyone builds their objects separately but discover commonalities between them. In fact, each object is really just a different kind of Car. This is where the inheritance technique saves time: Create one generic class (Car), and then define the subclasses (RaceCar and Limousine) that are to inherit the generic class’s traits.

3.Flexibility through polymorphism

Riffing on this example, you now need just a few drivers, or functions, like “driveCar,” driveRaceCar” and “DriveLimousine.” RaceCarDrivers share some traits with LimousineDrivers, but other things, like RaceHelmets and BeverageSponsorships, are unique.

This is where object-oriented programming’s sweet polymorphism comes into play. Because a single function can shape-shift to adapt to whichever class it’s in, you could create one function in the parent Car class called “drive” — not “driveCar” or “driveRaceCar,” but just “drive.” This one function would work with the RaceCarDriver, LimousineDriver, etc. In fact, you could even have “raceCar.drive(myRaceCarDriver)” or “limo.drive(myChauffeur).”

4.Effective problem solving

Object-oriented programming is often the most natural and pragmatic approach, once you get the hang of it. OOP languages allows you to break down your software into bite-sized problems that you then can solve — one object at a time.

```

Look for disadvantages of this paradigm.

```

1. Steep learning curve: The thought process involved in object-oriented programming
may not be natural for some people, and it can take time to get used to it. It is
complex to create programs based on interaction of objects. Some of the key
programming techniques, such as inheritance and polymorphism, can be
challenging to comprehend initially.

2. Larger program size: Object-oriented programs typically involve more lines of code
than procedural programs.

3. Slower programs: Object-oriented programs are typically slower than procedurebased programs, as they typically require more instructions to be executed.

4. Not suitable for all types of problems: There are problems that lend themselves well
to functional-programming style, logic-programming style, or procedure-based
programming style, and applying object-oriented programming in those situations will
not result in efficient programs.

```

<br/>
<br/>

# File analyzing

### · File device.php<!-- omit in toc -->

<br/>

In this Class we have to create a logic in wiche the DeviceManager Class manage the
function getDeviceSerialNumber wiche is calling the function getSerialNumber() in the Device Class.
this triggers the echo of the serialNumber of the device.
<br/>
<br/>

```
· Create a class called Device.

· Then create another one called Mobile and then another one called Tablet.

· The Device has to define the common properties for a device, like, for example,
a method called getSerialNumber() which returns the Device serial number.

· The Mobile and Tablet classes have to extend the Device class and define some particular
properties by their own.

· You should also create a class called DeviceManager. This class has to have a method
called getDeviceSerialNumber(Device $device) which has to call the getSerialNumber() method of
Device objects.

· The DeviceManager Instance calls the getDeviceSerialNumber method with each one of
the devices objects.
```

### · File AbstractDevice.php <!-- omit in toc -->

<br/>

In this Abstract Class Device we had to create three functions, the function getDatil is called by
the Mobile wiche extendes Device, and prints de ID of the mobile.
<br/>
<br/>

```
· Create an abstract class Device which defines an abstract method called getDetail($deviceId).

· Create these two methods getId which returns the name of this device and getSerialNo
returns the serial number for this device.

· Now create a class which extends the Device and implements getDetail($deviceId) method.
Each device defines in its own way the details. That’s why it is abstracted to let the subclasses
implement this method. The other methods are common between devices.
```

### · File InterfaceDevice.php <!-- omit in toc -->

<br/>
We have 3 Classes DeviceManager, MemoryRepository, Device.
DeviceRepository is an Interface wiche MemoryRepository has to implement in order
to acces de createDevice() and findId() functions

MemoryRepository creates an Array wiche is empty ath the begining until we create an instance of DeviceManager and we create the objet wiche will be injected by the function addDevice();
<br/>
<br/>

Now let’s create an interface for a Device repository.

```
· First create a Device class with some properties, as you like.

· Then create an interface called DeviceRepository, which defines two methods create(Device $device)
which has an injection of the Device class you have created, and findById($deviceId) which with the
$deviceId returns the Device object but remember this is an interface do not implement methods,
it just defines them.

· Now we need an implementation of the interface DeviceRepository so we are going to create a
class called MemoryRepository which implements the DeviceRepository. Here you can define the methods
as you like.

· Finally we need to create a class called DeviceManager, which defines a method
addDevice(DeviceRepository $repository, Device $device).

· Create an instance of it and inject to this method the implementation you have done.

Remember this is to check your understanding about OOP.

```
