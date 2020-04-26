import React, { useRef } from 'react';
import PropTypes from 'prop-types';
import { NavigationWrapper, NavigationList, NavigationItem } from './Navigation.css';

const Navigation = ({ children }) => {
  const nav = useRef(null);

  const items = children.map(item => (
    <NavigationItem key={item.props.to}>
      {item}
    </NavigationItem>
  ));

  return (
    <NavigationWrapper ref={nav}>
      <NavigationList>
        {items}
      </NavigationList>
      <i onClick={() => nav.current.classList.remove('active')} className="fas fa-times"></i>
      <i onClick={() => nav.current.classList.add('active')} className="fas fa-bars"></i>
    </NavigationWrapper>

  );
}

Navigation.propTypes = {
  children: PropTypes.array.isRequired
}

export default Navigation;