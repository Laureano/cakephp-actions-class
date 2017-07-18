# CakePHP ActionsClass plugin

**This is a plugin in development just created to test if this idea is something viable. Use it at your own risk (including the fact that this repo can be destroyed at any time if I see fit).** 

This plugin gives you the ability to manage your CakePHP Controller actions as single class. Each action of your Controllers will be managed in its own object.

## Roadmap

- [x] Serve a simple action  
- [x] Serve an action behind a routing prefix  
- [x] Let the system fallback to CakePHP dispatching cycle in case an Action does not exist  
- [x] Serve an action behind a nested routing prefix  
- [x] Serve an action from a plugin
- [x] Serve an action from a plugin, behind a (nested) routing prefix    
- [x] Test working with Components
    - [x] Loading a component in an action
    - [x] Loading two different components in two different action
- [x] Try working with an "AppAction"
- [ ] Check that integration tests works with this plugin  
- [ ] Start writing unit tests  
- [ ] Write some docs  
- [x] Run a sniffer  

## License

Copyright (c) 2015 - 2017, Yves Piquel and licensed under [The MIT License](http://opensource.org/licenses/mit-license.php).
Please refer to the LICENSE.txt file.