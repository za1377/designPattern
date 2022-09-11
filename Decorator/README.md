Decorator is a structural design pattern that lets you attach new behaviors to objects by placing these objects inside special wrapper objects that contain the behaviors.

Problem : Imagin that you have a program that record the house for seling. Every house have some facilites. If you want to create classes for every facility and combine facilites, you will be in trouble.

Solution : This pattern helps us to dynamically add features to objects at run-time, without the need to manipulate classes and create subclasses for each feature. With this template, we can add features to an object layer by layer and step by step according to the user's request.

The structure that this pattern creates is similar to a stack. Every feature that user select, you can add it like a layer to the simple house. For example: pool(parking(simple house))).
