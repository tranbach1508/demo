import React, { Component } from 'react';

class Products extends Component {
    constructor(){
        super();
        this.state = {
            products: []
        }
    }
    componentDidMount() {
        fetch('api/products')
        .then(response =>{
            return response.json();
        })
        .then(products => {
            this.setState({ products });
        })
    }

    renderProduct(){
        return(
            this.state.products.map(function(products,index){
                return(
                    <div className="item  col-xs-3 col-lg-4" key={index}> 
                        <div className="thumbnail"> <img className="group list-group-image" src={"http://localhost:88/test/public/images/"+products.image}
                         alt="Sản phẩm 1" width={300} /> 
                        <div className="caption"> 
                            <h4 className="group inner list-group-item-heading"> {products.name}</h4> 
                            <p className="group inner list-group-item-text"> {products.introduct}</p> 
                            <div className="row"> 
                            <div className="col-xs-12 col-md-6"> 
                                <p className="lead"> {products.price} đ</p> 
                            </div> 
                            <div className="col-xs-12 col-md-6"> <a className="btn btn-success" href="http://hocwebgiare.com/">Chi tiết</a> 
                            </div> 
                            </div> 
                        </div> 
                        </div> 
                    </div>  
                )
            })
        )
    }
    
    render() {
        return (
            <div>
                <h3> Sản phẩm nổi bật</h3>  
                <div className="row"> 
                {this.renderProduct()}
                </div>
            </div>
        );
    }
}

export default Products;