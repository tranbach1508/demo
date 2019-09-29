import React, { Component } from 'react'
import {BrowserRouter as Router,Route} from 'react-router-dom'
import Products from '../products/products'
import Product_detail from '../products/product_detail'
import Home from '../home'

class RouteURL extends Component {
    render() {
        return (
            <Router>
                <div>
                <Route exact path="/" component={Home}></Route>
                <Route path="/product" component={Products}></Route>
                <Route  path="/product_detail" component={Product_detail}></Route>
                </div>
            </Router>
        );
    }
}

export default RouteURL;