import React from "react";
import { Nav, NavLink, NavMenu }
    from '../Components/Navbar/NavbarElements';

const Navbar = () => {
    return (
        <>
            <Nav>
                <NavMenu>
                    <NavLink to="/one">
                            One
                    </NavLink>
                    <NavLink to="/two">
                            Two
                    </NavLink>
                    <NavLink to="/three">
                            Three
                    </NavLink>
                    <NavLink to="/four"> 
                            Four
                    </NavLink>
                </NavMenu>
            </Nav>
        </>
    );
};

export default Navbar;