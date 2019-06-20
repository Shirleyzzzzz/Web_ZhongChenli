import React from 'react';
import logo from './logo.jpeg';
import './App.css';
import Oath from './Oath';

class App extends React.Component {
  render() {
    return (
      <div className="App">
        <header className="App-header">
          <img src={logo} className="App-logo" alt="logo" />
          <Oath />
        </header>
      </div>
    );
  }
}

export default App;
