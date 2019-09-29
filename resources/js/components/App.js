import React, { Component } from 'react';
import Nav from './navbar/nav';
import RouteURL from './RouteURL/RouteURL';


class App extends Component {
    render() {
        return (
            <div>
                <Nav></Nav>
                <div>
                <RouteURL/>
                </div>
            </div>
        );
    }
}

export default App;