import { type CounterSchema } from 'entities/Counter';
import { type UserSchema } from 'entities/User';
import { type LoginSchema } from 'features/AuthByUsername';
import { createReduxStore } from 'app/providers/StoreProvider';
import { type AnyAction, type CombinedState, type EnhancedStore, type Reducer, type ReducersMapObject } from '@reduxjs/toolkit';
import { type ProfileSchema } from 'entities/Profile';
import { type AxiosInstance } from 'axios';

const store = createReduxStore();

export interface StateSchema {
  counter: CounterSchema
  user: UserSchema

  // Async reducers
  loginForm?: LoginSchema
  profile?: ProfileSchema
}

export type AppDispatch = typeof store.dispatch;

export type StateSchemaKey = keyof StateSchema;

export interface ReducerManager {
  getReducerMap: () => ReducersMapObject<StateSchema>
  reduce: (state: StateSchema, action: AnyAction) => CombinedState<StateSchema>
  add: (key: StateSchemaKey, reducer: Reducer) => void
  remove: (key: StateSchemaKey) => void
}

export interface ReduxStoreWithManager extends EnhancedStore<StateSchema> {
  reducerManager: ReducerManager
}

export interface ThunkExtraArg {
  api: AxiosInstance
  navigate: any
}

export interface ThunkConfig<T> {
  rejectValue: T
  extra: ThunkExtraArg
}
