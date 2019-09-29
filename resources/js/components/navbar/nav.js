import React, { Component } from 'react';

class Nav extends Component {
    constructor(){
        super();
        this.state = {
            categories: []
        }
    }

    componentDidMount() {
        fetch('api/categories')
        .then(response => {
            return response.json();
        })
        .then(categories => {
            this.setState({ categories });
        });
    }
    
    renderCategories(){
        return(
            this.state.categories.map(function(categories,index){
                return(
                    <li className="nav-item" key={index}>
                    <a className="nav-link" href="#">{categories.name} <span className="sr-only">(current)</span></a>
                    </li>
                );
            })
        )
    }

    render() {
        return (
            <div>
                <nav className="navbar navbar-expand-lg navbar-light bg-light fixed-top">
                <a className="navbar-brand">Categories</a>
                <button className="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span className="navbar-toggler-icon" />
                </button>
                <div id="my-nav" className="collapse navbar-collapse">
                <ul className="navbar-nav mr-auto">
                    {this.renderCategories()}
                </ul>
                </div>
            </nav>
            </div>
        );
    }
}

export default Nav;