import React, { Suspense, useEffect } from 'react';

import { classNames } from 'shared/lib/classNames/classNames';
import { AppRouter } from 'app/providers/router';
import { Navbar } from 'widgets/Navbar';
import { Sidebar } from 'widgets/Sidebar';

import 'shared/config/i18n/i18n';
import { useTheme } from 'app/providers/ThemeProvider';
import { useDispatch } from 'react-redux';
import { userActions } from 'entities/User';

const App = () => {
  const { theme } = useTheme();
  const dispatch = useDispatch();

  useEffect(() => {
    dispatch(userActions.initAuthData());
  }, [dispatch]);

  return (
		<div className={classNames('app', {}, [theme])}>
			<Suspense fallback="">
				<Navbar/>
				<div className="content-page">
					<Sidebar/>
					<AppRouter/>
				</div>
			</Suspense>
		</div>
  );
};

export default App;
