import React from 'react';
import { BrowserRouter as Router, Switch, Route, Redirect } from "react-router-dom";

import App from './App';
import SignIn from './Signin';

const indexDir = "/WS/react-app";

const Routes = (props) => (
    <Router {...props}>
        <Switch>
            <Route path={indexDir + "/dashboard"}>
                <App />
            </Route>
            <Route exact path={indexDir}>
                <Redirect to={indexDir + "/dashboard"} />
            </Route>
            <Route path={indexDir + "/signin"}>
                <SignIn />
            </Route>
        </Switch>
    </Router>
);

export default Routes;