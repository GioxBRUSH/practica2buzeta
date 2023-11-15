
import './App.css';
import{useState, useEffect} from 'react';
import Frameworks from './components/Frameworks';
import axios from 'axios';
import { useState, useEffect } from 'react';
import Frameworks from './components/Frameworks';


function App() {
  const [profile, SetProfile] = useState({});
  const [frameworks, SetFrameworks] = useState([]);
  const [hobbies, SetHobbies] = useState([]);

  const getProfileData = () => {
    axios.get('https://example.com/api/profile')
      .then(function (response) {
        console.log(response.data);
        SetProfile(response.data);
        SetFrameworks(response.data.frameworks);
        SetHobbies(response.data.hobbies);
      })
      .catch(function (error) {
        console.log(error);
      });
  };



  return (
    <div className="App">
      <h1>{profile.name}</h1>
      <Frameworks frameworks={frameworks} />
    </div>
  );
}

export default App;

  useEffect(() =>{
    //lmaado api
    getProfileData();
  }, []);


  const getProfileData=()=>{
    axios.get('')
    .then(function(response)){
      console.log(response.data);
      SetProfile(response.data);
      SetFrameworks(response.data.frameworks);
      SetHobbies(response.data.hobbies);
    })
    .catch(function (error)){

    }
  }
  return (
    <div className="App">
        <h1>{profile.name}</h1>

        <Frameworks framweorks={frameworks} />
    </div>
  );
}

export default App;
