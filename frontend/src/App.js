import React from 'react';
import './App.css';
import AppWrapper from './utils/AppWrapper.css';
import Navigation from './components/Navigation/Navigation';
import Home from './components/Home/Home';
import BuildMeal from './components/BuildMeal/BuildMeal';
import { BrowserRouter as Router, Route, Switch, NavLink } from 'react-router-dom';

const App = () => {
  return (
    <Router>
      <Navigation>
        <NavLink to='/meal'>Dodaj posiłek</NavLink>
        <NavLink to='/test'>test1</NavLink>
        <NavLink to='/test2'>test2</NavLink>
        <NavLink exact to='/'>home</NavLink>
      </Navigation>

      <Switch>
        <AppWrapper>
          <Route exact path="/" component={Home} />
          <Route path='/meal' component={BuildMeal} />
        </AppWrapper>
      </Switch>
    </Router>
  );
}

export default App;