import { Provider } from 'react-redux';
import { createReduxStore } from 'app/providers/StoreProvider';
import { type StateSchema } from 'app/providers/StoreProvider';
import { type DeepPartial } from '@reduxjs/toolkit';
import { useNavigate } from 'react-router-dom';

interface StoreProviderProps {
  children?: React.ReactNode
  initialState?: DeepPartial<StateSchema>
}

export const StoreProvider = ({
  children,
  initialState
}: StoreProviderProps) => {
  const navigate = useNavigate();

  const store = createReduxStore(initialState as StateSchema, navigate);

  return <Provider store={store}>{children}</Provider>;
};
