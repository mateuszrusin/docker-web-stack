import React from 'react';
import { HomeWrapper, Description, LinkButton } from './Home.css';
import { Link } from 'react-router-dom';

const Home = () => {
  return (
    <HomeWrapper>
      <Description>
        Opis kaloriusza....Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nesciunt, optio, inventore laudantium fugit ad culpa amet voluptate omnis ipsa officia sed perspiciatis aperiam sequi modi nobis nisi. Error, eligendi esse?
      </Description>
      <LinkButton>
        <Link to='/meal'>Dodaj posiłek</Link>
      </LinkButton>
    </HomeWrapper>
  );
}

export default Home;