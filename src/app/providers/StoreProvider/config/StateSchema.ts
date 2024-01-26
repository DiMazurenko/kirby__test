import { type CounterSchema } from 'entities/Counter';
import { type UserSchema } from 'entities/User';
import { type LoginSchema } from 'features/AuthByUsername';
import { createReduxStore } from 'app/providers/StoreProvider';

const store = createReduxStore();

export interface StateSchema {
  counter: CounterSchema
  user: UserSchema
  loginForm: LoginSchema
}

export type AppDispatch = typeof store.dispatch;
