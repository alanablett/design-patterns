# Strategy Pattern

Defines a family of algorithms, encapsulates each one, and makes them interchangable. It lets the algorithm vary independantly from the client that is using it.

## Example

In this example we take a library as the client. The library has a number of books in an array. We need to sort and organise that set of books. To do so we use the Sorter and Grouper interfaces. These interfaces define a single function each that the implemetation algorithms must implement. We then use composition to pull those algorithms into the library class but loosely typed as interfaces. Meaning we could swap out the algorithms at any time as long as their replacements adheres to the interface.