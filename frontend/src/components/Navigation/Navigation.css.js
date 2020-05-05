import styled from 'styled-components';

export const NavigationWrapper = styled.nav`
  position: fixed;
  top: 0;
  left: 0;
  height: 100vh;
  background-color: ${({ theme }) => theme.mineShaft};
  width: 270px;
  box-shadow: 2px 5px 5px black;
  border-radius: 1px;

  i.fa-times {
    position: absolute;
    top: 20px;
    right: 20px;
    color: white;
    font-size: 30px;
    display: none;
  }

  i.fa-bars {
    position: fixed;
    top: 20px;
    left: 20px;
    font-size: 30px;
    color: ${({ theme }) => theme.mineShaft};
    display: none;
  }

  @media (max-width: 1024px) {
    left: -400px;
    transition: .3s;

    &.active {
      left: 0;
    }

    i.fa-times {
      display: block;
    }

    i.fa-bars {
      display: block;
    }
  }
`;

export const NavigationList = styled.ul`
  text-align: center;
  padding-top: 75px;
`;

export const NavigationItem = styled.li`
  margin: 15px 0;
  list-style: none;

  a {
    display: block;
    padding: 8px 0;
    width: 100%;
    text-decoration: none;
    color: white;
    font-size: 18px;
    text-transform: uppercase;
    font-weight: bold;

    &.active {
      background-color: #3f51b6;
    }

    &:hover {
      background-color: gray;
    }
  }
`;