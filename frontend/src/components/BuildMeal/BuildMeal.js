import React, { useState } from "react";
import { BuildMealWrapper, MealDescription, AddMeal } from "./BuildMeal.css";
import axios from "axios";

const BuildMeal = () => {
  const [options, setOptions] = useState([]);

  const getData = async () => {
    let propositions = [];
    try {
      const res = await axios.get("/products.json");
      console.log(res);
      res.data.forEach(item => {
        console.log(item);
        propositions.push(`${item.name} (${item.kcal} kcal)`);
      });
      setOptions(propositions);
    } catch (err) {
      console.log(err);
    }
  };

  return (
    <BuildMealWrapper>
      <MealDescription>Skomponuj swój posiłek</MealDescription>

      <AddMeal>
        <label>Produkt w 100g: </label>
        <input type="text" />
      </AddMeal>
    </BuildMealWrapper>
  );
};

export default BuildMeal;
