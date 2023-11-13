import { Provider } from 'react-redux'
import { createReduxStore } from 'app/providers/StoreProvider/config/store'

interface StoreProviderProps {
  children?: React.ReactNode
}

const store = createReduxStore()

export const StoreProvider = ({ children }: StoreProviderProps) => {
  return <Provider store={store}>{children}</Provider>
}
