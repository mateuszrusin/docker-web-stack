import { createStore, compose, applyMiddleware } from 'redux';
import thunk from 'redux-thunk';

const composeEnhancers = window.__REDUX_DEVTOOLS_EXTENSION_COMPOSE__ || compose;

const initialState = {
  test: []
}
const rootReducer = (state = initialState, action) => {
  return state;
}

const store = createStore(rootReducer, composeEnhancers(applyMiddleware(thunk)));

export default store;