# Observer Pattern

Defines a one to many dependency between objects so that when one bject changes state, all of its dependencies are notified.

## Example

We create a subject interface which allows for observers to sign up, remove themselves, and fires a notification when the subject changes. We then implement that interface in the product class. The products class has an additional method called `setSomeNewData` which fires the `notifyObservers` method once it has changed some data. This then passes that data through to the observers allowing them to access it. The Observer interface simply defines an update method. This must be implemented by all observers and is the method fired when the observer actually observes a change in the subject. In our example a ProductEmailer class dumps out the data that is sent from the product subject.