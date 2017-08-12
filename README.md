# Strategy Design Pattern

## Definition From Head First Design Patterns

The Strategy Pattern defines a family of algorithmns, encapsulates each one, and makes them interchangable. This pattern lets the algorithmn vary independently from clients that use it.

## Description

The Strategy Pattern (sometimes referred to as the Policy Pattern) enables specific algorithms at runtime.

According to the Strategy Pattern, the behaviors of a class should not be inherited. Instead they should be encapsulated using interfaces. As an example, consider a car class. Two possible functionalities for car are `brake` and `accelerate`.

Since `accelerate` and `brake` behaviors change frequently between models, a common approach is to implement these behaviors in subclasses. This approach has significant drawbacks: `accelerate` and `brake` behaviors must be declared in each new Car model. The work of managing these behaviors increases greatly as the number of models increases, and requires code to be duplicated across models. Additionally, it is not easy to determine the exact nature of the behavior for each model without investigating the code in each.

The Strategy Pattern uses composition <b>instead</b> of inheritance. In the Strategy Pattern, behaviors are defined as separate interfaces and specific classes that implement these interfaces. This allows better decoupling between the behavior and the class that uses the behavior. The behavior can be changed without breaking the classes that use it, and the classes can switch between behaviors by changing the specific implementation used without requiring any significant code changes. Behaviors can also be changed at run-time as well as at design-time.

## Benefits

Strategy Pattern is beneficial because it makes your intents clear. It says <i>"this logic is pluggable and conditional"</i>, i.e. there can be multiple implementations which may vary depending on user actions, configuration, or even platform.

Using the Strategy Pattern may improve readability because, while a class which implements some particular strategy <b>should</b> have a descriptive name, e.g. USAIncomeTaxCalculator, if/else (of case statements) blocks are "nameless", in best cases just commented, and comments can lie. Personally, having more that 3 if/else blocks in a row is not readable, and gets pretty bad with nested blocks.

The Open/Closed principle is also relevant here. The Strategy Pattern allows you to extend logic in some parts of your code ("open for extension") without rewriting those parts ("closed for modification").

## How To Identify A Good Candidate For Strategy Pattern

* One Goal But Several Ways To Complete The Goal Based On Specified Conditions
	* Several (possibly nested) if/else statements that identify a condition to perform a specific method
	* Several concrete classes that perform that same task with little variance 

```
foreach (var agreement in Agreements) {

	if (Type1.Contains(agreement)) {
		if (condition1 || condition2) {
			this.SendToSys1A();
		}
	} else if (Type1.Contains(agreement)) {
		this.SendToSys2A();
	}

	if (condition2) {
		this.SendToSys2A();
	}

	if (Type2.Contains(agreement) || Type4.Contains(agreement)) {
		this.SendToSys3A();
	}
}
```

## Scenario

Imagine that you have a component that renders graphs for a website depending on whether it is a standard web browser or a smart phone browser. On one end you have code that detects the type of browser, then creates and sets the strategy on another component that could use the strategy object in some complex code that does not need to be duplicated. It does the work in both situations leaving the details of the actual drawing of the graph to the appropriate strategy object:

```
interface GraphStrategy {
    Image renderGraph(Data graphData);
}

class BigGraphStratedy implements GraphStrategy {
    ...
}

class SmallGraphStrategy implements GraphStrategy {
    ...
}
```

Then, in a different part of the application:

```
GraphStrategy graphStrategy;

if (phoneBrowser == true) { 
    graphStrategy = new SmallGraphStrategy();
} else {
    graphStrategy = new BigGraphStrategy();
}
```

The rest of the application can then use `graphStrategy.renderGraph()` without having to know whether full or small image rendering is being performed.

## Sources

* https://en.wikipedia.org/wiki/Strategy_pattern

* https://www.daugherty.com/code-notes-refactoring-with-the-strategy-pattern/

* https://stackoverflow.com/questions/1710809/when-and-why-should-the-strategy-pattern-be-used

* https://softwareengineering.stackexchange.com/questions/302612/advantages-of-strategy-pattern