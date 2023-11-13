import { Provider } from 'react-redux'
import { createReduxStore } from 'app/providers/StoreProvider/config/store'
import { type StateSchema } from 'app/providers/StoreProvider/config/StateSchema'

interface StoreProviderProps {
  children?: React.ReactNode
  initialState?: StateSchema
}

export const StoreProvider = ({
  children,
  initialState
}: StoreProviderProps) => {
  const store = createReduxStore(initialState)

  return <Provider store={store}>{children}</Provider>
}
