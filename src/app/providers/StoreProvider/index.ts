import { StoreProvider } from './ui/StoreProvider';
import { createReduxStore } from './config/store';
import type { StateSchema, AppDispatch } from 'app/providers/StoreProvider/config/StateSchema';

export { StoreProvider, createReduxStore, type StateSchema, type AppDispatch };
