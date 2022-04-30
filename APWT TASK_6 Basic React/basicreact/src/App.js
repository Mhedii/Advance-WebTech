import { BrowserRouter, Route, Routes } from 'react-router-dom';
import 'bootstrap/dist/css/bootstrap.min.css';
import './App.css';
import Home from './Pages/Home/Home';
import Register from './Register/Register';
import UserList from './Pages/UserList/UserList';
import ProductDetails from './Pages/ProductDetails/ProductDetails';
import EmployeeDetails from './Pages/EmployeeDetails/EmployeeDetails';
import { Contact } from './Pages/Contact/Contact';
import SignIn from './Register/signIn';
import EditUserList from './Pages/UserList/EditUserList';
import Dashboard from './Pages/Dashboard/Dashboard';

function App() {
  return (
    <div className="App">
      <BrowserRouter>
        <Routes>
          <Route exact path="/" element={<Home />} />
          <Route exact path="/registration" element={<Register />} />
          <Route exact path="/login" element={<SignIn />} />
          <Route exact path="/userList" element={<UserList />} />
          <Route exact path="/userEdit/:id/:name" element={<EditUserList />} />
          <Route exact path="/productDetails" element={<ProductDetails />} />
          <Route exact path="/employeeDetails" element={<EmployeeDetails />} />
          <Route exact path="/contact" element={<Contact />} />

          <Route path="dashboard" element={<Dashboard />} >
            {/* <Route path='/dashboard' element={<DashboardHome />}></Route> */}
            <Route path="/dashboard/userList" element={<UserList />} ></Route>
            <Route path="/dashboard/userEdit/:id/:name" element={<EditUserList />} ></Route>
            <Route path="/dashboard/productDetails" element={<ProductDetails />} ></Route>
            <Route path="/dashboard/employeeDetails" element={<EmployeeDetails />} ></Route>

          </Route>
        </Routes>
      </BrowserRouter>
    </div>
  );
}

export default App;
