# Factory Pattern

The factory pattern  defines and interface for creating an object. It lets a sub-class decide how to create the object.

# Example

We create an abstract class called `SocialFactory`. This class just defines a method called `build` which takes a string as a parameter. We then extend this base class and create a `SocialWidgetFactory`. This class is responsible for deciding which concreate class we will build when we call the `build` method and pass it a string. All of the classes that this factory can build should share the same interface/base class, in this case they all extends the base class `Widget`.